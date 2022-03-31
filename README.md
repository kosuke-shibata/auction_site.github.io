## アプリケーション名
<a href="https://user-images.githubusercontent.com/83070201/160960766-5990c6f4-a5f7-469a-a152-30d9211805f9.png" target="_blank">![main-title](https://user-images.githubusercontent.com/83070201/160960766-5990c6f4-a5f7-469a-a152-30d9211805f9.png)</a>

## 作成背景

このアプリケーションはプログラミングやWebデザインの勉強を始めたばかりの人をターゲットにした成果物の販売サイトである。

昨今の副業ブームにより、プログラミングやWebデザインの勉強を始める人が増加している。しかし、実際に案件を獲得することは難しく、途中で断念してしまう人も多くない。

実際私も2021年の2月からプログラミングの勉強をはじめたが、現在もプログラミングで収入を得ることはできていない。

そこで、プログラミング初心者やWebデザイン初心者でも企業や個人から案件を獲得できるようなサイトを作ることはできないかと考えたのがこのサイトを作成した背景である。


## 使用の流れ・工夫点

サイトの流れとしては、作成されたサイトやWebデザインなどを一覧として見ることができ、気に入ったものがあったら購入するというものである。

出品するものは、自分がこれまでに作ってきた架空のサイトやWebデザインなどである。購入者はその中から自分の気に入った成果物を買うことができる。

成果物は出品の際にURLを埋める欄があり、そこにGitHubのURLを載せる。買い手側は購入するとそのURLが見れるようになるということになる。

成果物を出品するユーザーは初心者を想定して作ってあるため、成果物を売る際の価格は0円、500円、1000円のような低価格に設定できるようにしている。そのため、企業には掘り出し物を見つけるような感覚でこのサイトを使用できるというメリットがある。

売り手側としては自分の成果物を見てもらえるだけでなく、買い手側から気に入ってもらえればその成果物が案件として生まれ変わるというメリットもある。


## 機能

### ヘッダー
- アプリケーションのロゴを押すと一覧画面に移動する
- 新規登録を押すと会員登録に移動する
- ログインを押すとマイページログイン画面に移動する
- カートを押すとカート画面に移動する（ログイン前はログイン画面に移動）
- 「出品する」を押すと出品画面に移動する（ログイン前はログイン画面に移動）
- プロフィール写真を押すとマイプロフィール画面に移動する
- ログアウトを押すとログアウトしログイン前に戻る

### 一覧画面
<img width="800px" alt="スクリーンショット 2022-04-01 1 42 02" src="https://user-images.githubusercontent.com/83070201/161108413-ea96ce17-1208-49c4-b5df-a7575753e6e6.png">

- 画像を押すと成果物詳細に移動する
- ペジネーション処理

### 成果物詳細画面
<img width="800px" alt="スクリーンショット 2022-04-01 1 42 32" src="https://user-images.githubusercontent.com/83070201/161108946-45a08d7a-5291-4e44-a44d-217a1a60a6ef.png">

- 画像下の名前を押すと作成者のプロフィールに移動する
- 「カートに入れる」を押すとカートに成果物の情報が入る

### 新規登録画面
- 個人情報を入力しRegisterを押すとログインする

### ログイン画面
- Emailアドレスとパスワードを入力するとログインする

### 出品画面
<img width="800px" alt="スクリーンショット 2022-04-01 1 47 30" src="https://user-images.githubusercontent.com/83070201/161109124-608f4bee-82ab-4ae5-8a01-e517e2a1e5e1.png">

- 成果物の情報を入力して「出品する」を押すと、出品される

### 出品完了画面
- 「編集する」を押すと、成果物の編集が可能になる
- 「戻る」を押すと、一覧画面に戻る
- 「削除する」を押すと、成果物が削除される

### カート画面（未完成）
- 「購入手続きに進む」を押すと購入画面に移動
- 「戻る」を押すと一覧画面に戻る

### 購入画面（未完成）
- 個人情報が全て入っていれば「購入を決定」が押せるようになる
- 「購入を決定」を押すと購入決定画面に移動する
- その後カート画面から購入したものの情報が消える（まだ導入途中）
- 「戻る」を押すと一覧画面に戻る

### マイプロフィール画面
- 「プロフィール編集」を押すとプロフィールの編集が可能になる
- 「クレジットカード登録編集」を押すとプロフィールの編集が可能になる
- 成果物の画像を押すとその成果物の出品完了画面に移動する
- 購入履歴の画像を押すとその成果物の購入完了画面に移動する（まだ導入途中）

### プロフィール画面
- 成果物の画像を押すとその成果物の詳細画面に移動する
- 購入履歴の画像を押すとその成果物の詳細画面に移動する（まだ導入途中）

## 環境
### 【言語】
HTML,CSS,SCSS,Javascript,PHP(8.0.15)

### 【フレームワーク・ライブラリ】
Laravel（6.20.44）
jQuery（3.6.0）

### 【OS】
Linux

### 【DB】
MariaDB

## これから実装していきたいこと
- 成果物検索機能
- 制作者と購入者のダイレクトメール機能


## テストユーザー
| id | 2 |
| ------------- | ------------- |
| name  | 山田太郎  |
| email  | yamada1111@gmail.com  |
| password | klmnopqrstu |
