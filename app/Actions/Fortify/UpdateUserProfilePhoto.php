<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Actions\Contracts\UpdatesUserProfilePhoto;
use Illuminate\Http\UploadedFile;

class UpdateUserProfilePhoto implements UpdatesUserProfilePhoto
{

    public function update(User $user, UploadedFile $file): void
    {
        $user->update([
            'profile_photo_path' => $file->storePublicly(
                'profile-photos',
                ['disk' => 'public']
            )
        ]);

    }


}
