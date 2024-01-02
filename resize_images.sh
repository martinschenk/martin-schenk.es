#!/bin/bash

# Array of original filenames without the extension
originals=("mammuts1" "mammuts2" "mammuts3" "mammuts4")

# Configuration
sizes=(300 1024)
source_file_type="png"
output_file_type="jpg" # Kann auf "png", "jpg" oder "webp" gesetzt werden
image_directory="./public/img/"

# Print header
echo "Image                Original Size        Resized Size         Reduction"

# Loop through all your original images
for base in "${originals[@]}"; do
  original_size_kb=$(du -sk "${image_directory}${base}.${source_file_type}" | cut -f1)
  original_size_bytes=$((original_size_kb * 1024))
  original_dimensions=$(identify -format "%wx%h" "${image_directory}${base}.${source_file_type}")
  original_width=$(echo $original_dimensions | cut -d'x' -f1)
  original_height=$(echo $original_dimensions | cut -d'x' -f2)

  # Loop through your sizes and create resized copies
  for size in "${sizes[@]}"; do
    height=$((size * original_height / original_width))
    filename="${image_directory}${base}-${size}w${height}h.${output_file_type}"
    
    if [ "$output_file_type" = "png" ]; then
      # Resize and optimize PNG for web
      convert "${image_directory}${base}.${source_file_type}" -resize "${size}x${height}!" \
        -strip -define png:compression-level=0 -define png:compression-filter=5 \
        -define png:compression-strategy=1 -define png:exclude-chunk=all \
        "${filename}"
    elif [ "$output_file_type" = "jpg" ]; then
      # Resize and optimize JPEG for web with high quality
      convert "${image_directory}${base}.${source_file_type}" -resize "${size}x${height}!" \
        -colorspace sRGB -strip -quality 95 -sampling-factor 4:4:4 \
        -define jpeg:fancy-upsampling=off -define jpeg:dct-method=float \
        -unsharp 0x1 "${filename}"
    elif [ "$output_file_type" = "webp" ]; then
      # Resize and optimize WebP for web with high quality
      convert "${image_directory}${base}.${source_file_type}" -resize "${size}x${height}!" \
        -strip -quality 100 "${filename}"
    fi
    
    new_size_kb=$(du -sk "${filename}" | cut -f1)
    new_size_bytes=$((new_size_kb * 1024))

    size_reduction=$(echo "scale=2; 100 - (${new_size_bytes} / ${original_size_bytes}) * 100" | bc)

    # Print in a nice table format
    printf "%-20s %-20s %-20s %-20s%%\n" "${base}-${size}w${height}h.${output_file_type}" "${original_size_kb}K" "${new_size_kb}K" "${size_reduction}"
  done
done

echo "Resizing and optimization complete."
