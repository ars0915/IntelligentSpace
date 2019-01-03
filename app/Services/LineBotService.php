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

    public function __construct()
    {
        #$this->lineUserId = $lineUserId;
        $this->lineBot = app(LINEBot::class);
    }

    /**
     * @param $lineUserId
     * @param $content
     * @return LINEBot\Response
     */

    public function pushMessage($lineUserId, $content){
        if (is_string($content)){
            $content = new TextMessageBuilder($content);
        }
        $this->lineUserId = $lineUserId;
        $response =  $this->lineBot->pushMessage($this->lineUserId, $content);
        return $response;
    }
}
