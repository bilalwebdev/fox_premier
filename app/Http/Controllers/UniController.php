<?php

namespace App\Http\Controllers;

use App\Helpers\CustomHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UniController extends Controller
{
    public function presignedUploadUrl(Request $request)
    {
        $this->validate($request, [
            'filename' => 'string|required',
        ]);

        $filename = $request->folder_name . "/" . Str::uuid() . $request->filename;

        return CustomHelper::signedUrl($filename, $request->contentType, );
    }
}
