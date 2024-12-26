
import os
import requests
from telegram import Update
from telegram.ext import Updater, CommandHandler, MessageHandler, Filters, CallbackContext

# تنظیمات اولیه
BOT_TOKEN = "YOUR_BOT_TOKEN"  # توکن ربات تلگرام
BASE_URL = "https://example.com/files/"  # URL پایه برای دریافت فایل‌ها
SAVE_DIR = "/v2plus/"  # پوشه‌ای که فایل‌ها در آن ذخیره می‌شوند

# بررسی و ساخت پوشه ذخیره در صورت نیاز
os.makedirs(SAVE_DIR, exist_ok=True)

def start(update: Update, context: CallbackContext):
    update.message.reply_text("سلام! نام فایل مورد نظر را ارسال کنید تا ذخیره شود.")

def handle_message(update: Update, context: CallbackContext):
    user_input = update.message.text.strip()
    file_url = f"{BASE_URL}{user_input}"
    save_path = os.path.join(SAVE_DIR, user_input)

    try:
        # دانلود فایل
        response = requests.get(file_url)
        response.raise_for_status()  # بررسی وجود خطا
        with open(save_path, "wb") as file:
            file.write(response.content)
        
        # ایجاد لینک فایل
        file_link = f"https://{os.environ['KOYEB_APP_NAME']}.koyeb.app/{SAVE_DIR}/{user_input}"
        update.message.reply_text(f"فایل با موفقیت ذخیره شد: {file_link}")

    except requests.exceptions.RequestException as e:
        update.message.reply_text(f"خطایی در دانلود فایل رخ داد: {e}")
    except Exception as e:
        update.message.reply_text(f"خطایی غیرمنتظره رخ داد: {e}")

def main():
    # تنظیمات ربات
    updater = Updater(BOT_TOKEN)
    dispatcher = updater.dispatcher

    # دستورات ربات
    dispatcher.add_handler(CommandHandler("start", start))
    dispatcher.add_handler(MessageHandler(Filters.text & ~Filters.command, handle_message))

    # شروع ربات
    updater.start_polling()
    updater.idle()

if __name__ == "__main__":
    main()
