#! /bin/bash

cp $(pwd)/web/sites/default/default.settings.php $(pwd)/web/sites/default/settings.php

cat $(pwd)/settings.php >> $(pwd)/web/sites/default/settings.php && chmod a-w $(pwd)/web/sites/default/settings.php

ln -s $(pwd)/custom-modules/ $(pwd)/web/sites/all/modules/
ln -s $(pwd)/custom-themes/ $(pwd)/web/sites/all/themes/
