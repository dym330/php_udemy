<?php 
namespace controller\topic\detail;

use db\CommentQuery;
use lib\Auth;
use db\TopicQuery;
use lib\Msg;
use model\TopicModel;

function get() {

  $topic = new TopicModel;
  $topic->id = get_param('topic_id', null, false);

  $fetchedTopic = TopicQuery::fetchById($topic);
  $comments = CommentQuery::fetchByTopicId($topic);

  if (!$fetchedTopic) {
    Msg::push(Msg::ERROR, 'トピックがみつかりません');
    redirect('404');
  }

  \view\topic\detail\index($fetchedTopic, $comments);
}