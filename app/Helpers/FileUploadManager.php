<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploadManager
{
    public static function uploadFile(UploadedFile $file, $file_path = null)
    {
        $file_path = $file_path ?? 'images/' . (auth()->id ?? '') . '/';

        $original_filename = $file->getClientOriginalName();
        $original_filename_arr = explode('.', $original_filename);
        $filename = $original_filename_arr[0];
        $file_ext = strtolower(end($original_filename_arr));
        $file_path_name = time() . '_' . Str::slug(pathinfo($original_filename, PATHINFO_FILENAME)) . '.' . $file_ext;
        // Use Storage::put to store the file
        if (Storage::put($file_path . $file_path_name, file_get_contents($file))) {
            $relative_path = $file_path . $file_path_name;
        } else {
            $relative_path = null;
        }

        return [
            'original_doc_name' => $original_filename,
            'doc_name' => $file_path_name,
            'path' => $relative_path,
            'slug' => Str::slug($filename) . '.' . $file_ext,
            'doc_type' => $file_ext,
        ];
    }

    public static function uploadFiles(array $files, $file_path = null)
    {
        $data = [];
        foreach ($files as $file) {
            if ($file instanceof UploadedFile) {
                $ab = self::uploadFile($file, $file_path); // Fixed method call

                if ($ab['path'] != null) {
                    array_push($data, $ab['path']);
                }
            } else {
                array_push($data, $file);
            }
        }

        return ['data' => $data];
    }
}
