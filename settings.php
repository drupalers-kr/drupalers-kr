
$root_path = dirname(__DIR__) . '/../..';
require_once "{$root_path}/vendor/autoload.php";

use Symfony\Component\Yaml\Yaml;
$yaml = Yaml::parse(file_get_contents("{$root_path}/.env.yml"));

foreach ($yaml as $key => $value) {
  if (!empty($key)) {
    ${$key} = $value;
  }
}
