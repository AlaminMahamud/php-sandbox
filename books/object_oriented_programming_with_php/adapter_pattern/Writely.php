<?php

class Writely implements DocManager(){
  public function authenticate($user, $pwd){}
  public function getDocuments($folderid){}
  public function getDocumentByType($folderid, $type){}
  public function getFolders($folderid=null){}
  public function saveDocuments($document){}
}

?>
