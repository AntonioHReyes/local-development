# Usa una imagen base ligera con Python
FROM python:3.10-slim

# Establecer directorio de trabajo en el contenedor
WORKDIR /app

# Instalar dependencias necesarias para yt-dlp y ffmpeg
RUN apt-get update && apt-get install -y \
    ffmpeg \
    && pip install --no-cache-dir yt-dlp \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Definir el comando por defecto del contenedor
ENTRYPOINT ["yt-dlp"]
