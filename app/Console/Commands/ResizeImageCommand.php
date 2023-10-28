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
        // Define image folder here; you can easily change this.
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

        $this->info("This script resizes an image to multiple dimensions.");

        $outputFolder = public_path($imageFolder);
        $this->info("The resized images will be saved in the following folder: $outputFolder");

        $sizes = [
            '320' => 'robot-320w.jpg',
            '480' => 'robot-480w.jpg',
            '800' => 'robot-800w.jpg',
            '1400' => 'robot-1400w.jpg',
            '1920' => 'robot-1920w.jpg',
        ];

        // Spinner characters
        $spinnerChars = ['|', '/', '-', '\\'];
        $spinnerIndex = 0;

        $headers = ['File Path', 'Dimensions', 'File Size (MB)'];
        $rows = [];

        $firstOutputPath = $outputFolder . '/' . reset($sizes);
        if (File::exists($firstOutputPath)) {
            if (!$this->confirm("The first file ($firstOutputPath) already exists. Overwriting it will also overwrite the other formats. Do you want to proceed?", true)) {
                return;
            }
        }

        foreach ($sizes as $width => $filename) {
            // Show spinner
            echo "\rProcessing " . $spinnerChars[$spinnerIndex];
            $spinnerIndex = ($spinnerIndex + 1) % 4;

            $outputPath = "$outputFolder/$filename";

            $img = Image::make($inputImagePath);
            $img->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($outputPath);

            // Fetch file size in MB
            $fileSize = round(File::size($outputPath) / 1024 / 1024, 2);

            $rows[] = [$outputPath, "${width}x" . $img->height(), $fileSize . ' MB'];
        }

        // Clear spinner
        echo "\r";

        $this->table($headers, $rows);

        $this->info("Images have been successfully resized and saved.");
    }
}
