<?php

namespace App\Trait;

use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

trait UploadFile
{
    protected function uploadImageInWebpFormat($photo, $userId, $width, $height, $folder)
    {
        try {
            $basePath = "kyc/{$folder}/{$userId}";
            $path = public_path($basePath);

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            $randomString = Str::random(40);
            $chunks = str_split($randomString, 7);
            $filename = implode('-', $chunks) . '.webp';
            $fullPath = $path . '/' . $filename;

            $manager = new ImageManager(new Driver());

            $manager->read($photo->getRealPath())
                ->scale($width, $height)
                ->toWebp()
                ->save($fullPath);

            return $filename; // فقط نام فایل
        } catch (\Exception $e) {
            throw new \Exception('خطا در آپلود تصویر: ' . $e->getMessage());
        }
    }
    protected function uploadImageInJpgFormat($photo, $userId, $width, $height, $folder)
    {
        try {
            $basePath = "kyc/{$folder}/{$userId}";
            $path = public_path($basePath);

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            $randomString = Str::random(40);
            $chunks = str_split($randomString, 7);
            $filename = implode('-', $chunks) . '.jpg';
            $fullPath = $path . '/' . $filename;

            $manager = new ImageManager(new Driver());

            $manager->read($photo->getRealPath())
                ->scale($width, $height)
                ->toJpeg()
                ->save($fullPath);

            return $filename; // فقط نام فایل
        } catch (\Exception $e) {
            throw new \Exception('خطا در آپلود تصویر: ' . $e->getMessage());
        }
    }
}
