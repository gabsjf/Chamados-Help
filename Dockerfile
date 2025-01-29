# Usa uma imagem oficial do PHP com Apache
FROM php:8.1-apache

# Copia os arquivos da aplicação para o diretório padrão do Apache
COPY . /var/www/html/

# Define as permissões corretas
RUN chmod -R 777 /var/www/html/database/arquivo.txt

# Expor a porta 80 para acessar o servidor
EXPOSE 80

# Inicia o Apache quando o container for iniciado
CMD ["apache2-foreground"]
