## Требования
Прежде чем приступить к запуску проекта, вам нужно будет установить Docker и Docker Compose. Ссылки для скачки ниже. 

Docker https://docs.docker.com/engine/install/

Docker Compose https://docs.docker.com/compose/install/

## Сборка проекта 
Вне зависимости от выбранного вебсервера алгоритм запуска одинаковый:
1. Собрать проект
2. Запустить проект
### nginx
Сборка
```
docker-compose -f nginx.docker-compose.yml build
```
Запуск 
```
docker-compose -f nginx.docker-compose.yml up -d --force
```

### apache2
Сборка
```
docker-compose -f apache2.docker-compose.yml build
```
Запуск
```
docker-compose -f apache2.docker-compose.yml up -d --force
```
О том, как все это работает, я расскажу на уроке


### Зайти в терминал контейнера
``` 
docker exec -it {container_name} bash
```
{container_name} - можно подсмотреть в соотвествующем docker-compose.yml файле. Например, чтобы зайти в терминал apache2, 
 нужно зайти в файл apache2.docker-compose.yml, найти поле container_name, скопировать его значение и вставить в команду.

Таким образом, готовая команда будет вглядит так:
``` 
docker exec -it apache2 bash
```

### Другие команды 

docker ps  посмотреть запущенные контейнеры а также их мена 
docker kill {container_name} остановит работу контейнера 