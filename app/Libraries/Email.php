<?php
declare(strict_types=1);

namespace App\Libraries;

use Illuminate\Support\Facades\Mail;

/**
 * Email
 */
class Email {

    /**
     * --------------------------------------------
     * メール送信
     *
     * @param string $sendTo
     * @param object $user
     * @param array $mailInfo
     * @return void
     * --------------------------------------------
     */
    static public function send(string $sendTo, array $mailInfo): void
    {

        // fromアドレス
        $from = [
            'name'    => 'test',
            'address' => 'sabamiso312@gmail.com',
        ];

        // toアドレス
        $to = $sendTo === 'user' ?
            [
                'name'    => $mailInfo['sei'],
                'address' => $mailInfo['email']
            ] : [
                'name'    => $from['name'],
                'address' => $from['address']
            ];

        // 件名
        $subject  = $mailInfo['subject'];

        // E-mail送信
        Mail::send(['text' => $mailInfo['template']], $mailInfo, function($message) use ($from, $to, $subject) {
            $message
                ->from($from['address'], $from['name'])
                ->to($to['address'], $to['name'])
                ->subject($subject);
        });
    }

}
