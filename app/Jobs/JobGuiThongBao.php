<?php

namespace App\Jobs;
use Illuminate\Support\Facades\Log;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Notification;
use App\Repositories\NotificationRepository;
class JobGuiThongBao implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $data_save_notifi;
    protected $data_send_device;
    protected $content;
    protected $NotificationRepository;

    public function __construct($data_save_notifi, $data_send_device, $content,$NotificationRepository)
    {
        $this->data_send_device = $data_send_device;
        $this->data_save_notifi = $data_save_notifi;
        $this->content = $content;
        $this->NotificationRepository = $NotificationRepository;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Notification::insert($this->data_save_notifi);
        $this->NotificationRepository->notificationApp($this->data_send_device);

        
    }
}
