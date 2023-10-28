<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ResizeImageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'image:resize';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Resize an image to multiple dimensions.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $imageFolder = 'img';
        $allowedExtensions = ['jpg', 'png', 'gif', 'bmp', 'webp'];

        do {
            $imageName = $this->ask("What is the name of the source image in public/$imageFolder folder?");
            $inputImagePath = public_path("$imageFolder/$imageName");
            $fileExtension = pathinfo($inputImagePath, PATHINFO_EXTENSION);

            if (!file_exists($inputImagePath)) {
                $this->error('The specified file does not exist. Please try again.');
                continue;
            } elseif (!in_array($fileExtension, $allowedExtensions)) {
                $this->error('Unsupported file type. Allowed types are: ' . implode(', ', $allowedExtensions));
                continue;
            }
        } while (!file_exists($inputImagePath) || !in_array($fileExtension, $allowedExtensions));

        $outputFormat = $this->choice(
            'What output file format do you want?',
            ['jpg', 'png', 'gif', 'bmp', 'webp'],
            $fileExtension
        );

        $baseFilename = pathinfo($imageName, PATHINFO_FILENAME);
        $this->info("This script resizes an image to multiple dimensions.");
        $outputFolder = public_path($imageFolder);
        $this->info("The resized images will be saved in the following folder: $outputFolder");

        $sizes = [
            '475' => $baseFilename . '-475w.' . $outputFormat,
            '640' => $baseFilename . '-640w.' . $outputFormat,
            '768' => $baseFilename . '-768w.' . $outputFormat,
            '1024' => $baseFilename . '-1024w.' . $outputFormat,
            '1280' => $baseFilename . '-1280w.' . $outputFormat,
            '1536' => $baseFilename . '-1536w.' . $outputFormat,
            '1920' => $baseFilename . '-1920w.' . $outputFormat,
        ];

        $spinnerChars = ['|', '/', '-', '\\'];
        $spinnerIndex = 0;

        $headers = ['File Path', 'Dimensions', 'File Size (MB)'];
        $rows = [];

        foreach ($sizes as $width => $filename) {
            echo "\rProcessing " . $spinnerChars[$spinnerIndex];
            $spinnerIndex = ($spinnerIndex + 1) % 4;

            $outputPath = "$outputFolder/$filename";
            $img = Image::make($inputImagePath);
            $img->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($outputPath);

            $fileSize = round(File::size($outputPath) / 1024 / 1024, 2);
            $rows[] = [$outputPath, "${width}x" . $img->height(), $fileSize . ' MB'];
        }

        echo "\r";
        $this->table($headers, $rows);
        $this->info("Images have been successfully resized and saved.");
    }
}
