#!/bin/bash

# Configuration
sizes=(640 768 1024 1280 1536)
source_file_type="png"
output_file_type="png"
image_directory="./public/img/"
quality=85 # Not used for PNG, but included if you want to output to JPEG

# Array of original filenames without the extension
originals=("mammuts1" "mammuts2" "mammuts3" "mammuts4")

# Print header
echo "Image                Original Size        Resized Size         Reduction"

# Loop through all your original images
for base in "${originals[@]}"; do
  original_size_kb=$(du -sk "${image_directory}${base}.${source_file_type}" | cut -f1)
  original_size_bytes=$((original_size_kb * 1024))

  # Loop through your sizes and create resized copies
  for size in "${sizes[@]}"; do
    filename="${image_directory}${base}-${size}w.${output_file_type}"
    
    # Resize and optimize PNG for web
    convert "${image_directory}${base}.${source_file_type}" -resize "${size}" \
        -strip -define png:compression-level=9 -define png:compression-strategy=1 \
        -define png:exclude-chunk=all "${filename}"
    
    new_size_kb=$(du -sk "${filename}" | cut -f1)
    new_size_bytes=$((new_size_kb * 1024))

    size_reduction=$(echo "scale=2; 100 - (${new_size_bytes} / ${original_size_bytes}) * 100" | bc)

    # Print in a nice table format
    printf "%-20s %-20s %-20s %-20s%%\n" "${base}-${size}w.${output_file_type}" "${original_size_kb}K" "${new_size_kb}K" "${size_reduction}"
  done
done

echo "Resizing and optimization complete."
