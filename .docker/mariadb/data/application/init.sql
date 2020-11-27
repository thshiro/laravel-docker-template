CREATE DATABASE IF NOT EXISTS laravel_docker_template;
CREATE DATABASE IF NOT EXISTS laravel_docker_template_testing;
GRANT ALL ON `laravel_docker_template`.* TO 'root'@'%';
GRANT ALL ON `laravel_docker_template_testing`.* TO 'root'@'%';