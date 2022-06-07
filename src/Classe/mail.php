<?php 

namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;

class mail 
{
    private $api_key = '16df1c8274a53553d16010234434fd69';
    private $api_key_secret = 'f6f077041f321d9b8525a2b447c375cc';

    public function send($to_email, $to_name, $subject, $content) {

        $mj = new Client($this->api_key, $this->api_key_secret, true, ['version' => 'v3.1']);

        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "colinesavy@gmail.com",
                        'Name' => "La boutique Française"
                    ],
                    'To' => [
                        [
                            'Email' => "$to_email",
                            'Name' => "$to_name"
                        ]
                    ],
                    'TemplateID' => 3971231,
                    'TemplateLanguage' => true,
                    'Subject' => $subject,
                    'Variables'=> [
                        "content"=> $content, 
                    ]
                ]
            ]
        ];

        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();
    }

}