#!/bin/bash

# Recorre todos los archivos JPG y PNG en la carpeta actual y subcarpetas
find . -type f \( -iname '*.jpg' -o -iname '*.png' \) | while read -r file; do
    # Obtiene el nombre del archivo sin extensión
    filename="${file%.*}"

    # Genera los nombres de los archivos de salida
    output_jpg="${filename}.jpg"
    output_webp="${filename}.webp"

    # Redimensiona y recorta la imagen, luego la guarda en formato JPG
    convert "$file" -resize 425x -gravity North -crop 425x425+0+0 +repage "$output_jpg"

    # Redimensiona y recorta la imagen, luego la guarda en formato WEBP
    convert "$file" -resize 425x -gravity North -crop 425x425+0+0 +repage "$output_webp"
done

