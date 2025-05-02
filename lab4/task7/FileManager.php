<?php

class FileManager
{
    public static string $dir = 'text';

    /**
     * Читає вміст файлу
     * @param string $filename
     * @return string
     */
    public static function read(string $filename): string
    {
        $path = self::$dir . '/' . $filename;
        if (file_exists($path)) {
            return file_get_contents($path);
        }
        return "Файл не знайдено.";
    }

    /**
     * Записує рядок у файл 
     * @param string $filename
     * @param string $text
     * @return void
     */
    public static function write(string $filename, string $text): void
    {
        $path = self::$dir . '/' . $filename;
        file_put_contents($path, $text . PHP_EOL, FILE_APPEND);
    }

    /**
     * Стирає вміст файлу
     * @param string $filename
     * @return void
     */
    public static function clear(string $filename): void
    {
        $path = self::$dir . '/' . $filename;
        if (file_exists($path)) {
            file_put_contents($path, ''); 
        }
    }
}
