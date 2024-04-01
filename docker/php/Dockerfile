FROM php:8.2-fpm
EXPOSE 5173

WORKDIR /src/Yii2

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    zip \
    unzip \
    p7zip \
    git && \
    rm -rf /var/lib/apt/lists/*

# Composerのインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Yii2のインストール
# 現状、phpコンテナに入り手動で以下のコマンドを流さなければならない
# composer create-project --prefer-dist yiisoft/yii2-app-basic .
