<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UploadVideo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $video;
    protected $caption;
    public function __construct($video,$caption)
    {
        $this->video = $video;
        $this->caption = $caption;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $client = new \Google_Client();
        $client->setApplicationName('Data Kita');
        $client->setAuthConfig('/home/lesmiserables/project_web/DataKita/client_secret_643209902818-9acmdn9apsm6pf6qkgbqav9vlovt5a6k.apps.googleusercontent.com.json');
        $client->addScope([
            'https://www.googleapis.com/auth/youtube.upload',
        ]);
        $client->setAccessType('offline');

        $client->setAccessToken($_SESSION['access_token']);

        $youtube = new \Google_Service_YouTube($client);
        $snippet = new \Google_Service_YouTube_VideoSnippet();
        $snippet->setCategoryId(22);
        $snippet->setDescription('test');
        $snippet->setTitle('test');

        $video = new \Google_Service_YouTube_Video($snippet);
        $response = $youtube->videos->insert(
            'snippet',
            $video,
            array(
                'data' => $this->videos,
                'mimeType' => 'video/*',
                'uploadType' => 'multipart'
            )
        );
    }
}
