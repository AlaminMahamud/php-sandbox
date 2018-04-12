<?php

interface DocManager{
  public function authenticate($user, $pwd);
  public function getDocuments($folderid);
  public function getFolders($folderid=null);
  public function saveDocument($document);

}

?>
