<?php

$chromePath = '/usr/bin/google-chrome';

$cmd = "$chromePath --headless --no-sandbox --disable-gpu --print-to-pdf=./output.pdf --no-margins ./page.html";

exec($cmd);
