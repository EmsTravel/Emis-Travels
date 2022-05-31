<?php


class CommentsController 
{
  public function display()
  {
    
      //gestion des templates
      $title="CommentsController";
      $template = 'commentsBack.phtml';
      include 'views/mainLayout.phtml';
  }
}