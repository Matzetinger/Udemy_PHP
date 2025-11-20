<?php

enum Status: int{
  case Aktiv = 1;
  case Inaktiv = 0;
  case Banned = -1;
}



echo Status::Banned->value;





?>











