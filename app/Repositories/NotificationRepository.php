<?php

namespace App\Repositories;

use App\Models\Notification;
use App\Repositories\BaseModelRepository;
use Illuminate\Support\Facades\Http;
class NotificationRepository extends BaseModelRepository
{
    protected $model;
    public function __construct(
        Notification $model
    ) {
        parent::__construct();
        $this->model = $model;
    }

    public function getModel()
    {
        return Notification::class;
    }

    public function createNotifications($data)
    {
        return Notification::create($data);
    }


    public function notificationApp($to_device,$data)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'key='.config('common.key_firebase')
        ])->post('https://fcm.googleapis.com/fcm/send', [
                "to" => $to_device,
                "notification" => [
                  "title"=> $data['title'],
                  "body"=> $data['content']
                ],
                "data"=> [
                  "story_id"=> "story_12345",
                  'type'=>"add_donho"
                ]
              
        ]);
    }

}