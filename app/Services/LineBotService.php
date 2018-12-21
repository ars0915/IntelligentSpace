<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/12/21
 * Time: 下午 3:01
 */
namespace App\Services;


use LINE\LINEBot;
use Nexmo\Response;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;

class LineBotService{
    /** @var LINEBot */

    private $lineBot;
    private $lineUserId;

    public function __construct($lineUserId)
    {
        $this->lineUserId = $lineUserId;
        $this->lineBot = app(LINEBot::class);
    }

    /**
     * @param LINEBot\MessageBuilder\TemplateMessageBuilder | string $content
     * @return Response
     */

    public function pushMessage($content): Response{
        if (is_string($content)){
            $content = new TextMessageBuilder($content);
        }
        return $this->lineBot->pushMessage($this->lineUserId, $content);
    }
}
