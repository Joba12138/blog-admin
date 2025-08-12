<?php

namespace App\Services;

use App\Models\Attachment;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AttachmentService
{
    public function store(UploadedFile $file, string $disk = 'oss', string $directory = 'attachments'): Attachment
    {
        $filename = uniqid().'.'.$file->getClientOriginalExtension();
        $path = Storage::disk($disk)->putFileAs($directory, $file, $filename, 'public');

        return Attachment::create([
            'disk' => $disk,
            'bucket_name' => null,
            'path' => $path,
            'url' => Storage::disk($disk)->url($path),
            'mime_type' => $file->getClientMimeType(),
            'original_name' => $file->getClientOriginalName(),
            'size' => $file->getSize(),
            'user_id' => auth()->id(),
        ]);
    }

    public function delete(Attachment $attachment): void
    {
        Storage::disk($attachment->disk)->delete($attachment->path);
        $attachment->delete();
    }
}
