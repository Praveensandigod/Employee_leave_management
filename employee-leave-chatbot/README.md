# Employee Leave Management Chatbot

This project is an Employee Leave Management System chatbot designed to assist employees with various tasks related to leave management. The chatbot provides a user-friendly interface for employees to log in, register, check leave balances, apply for leave, view leave status, and understand company leave policies.

## Features

- **User Authentication**: Employees can log in and register through the chatbot.
- **Leave Management**: Employees can check their leave balances, apply for leave, and view the status of their leave applications.
- **Company Policies**: The chatbot provides information about company leave policies and guidelines.
- **Error Handling**: The chatbot includes basic error handling to manage common queries and invalid inputs.

## Project Structure

```
employee-leave-chatbot
├── src
│   ├── app.js                  # Main entry point of the application
│   ├── bot
│   │   ├── chatbot.js          # Handles user interactions
│   │   ├── intents.js          # Defines user intents
│   │   └── responses.js        # Predefined responses for the chatbot
│   ├── routes
│   │   └── chatbotRoutes.js    # Defines routes for the chatbot API
│   ├── controllers
│   │   └── chatbotController.js # Handles requests from chatbot routes
│   ├── services
│   │   ├── leaveService.js     # Manages leave-related operations
│   │   └── userService.js      # Handles user-related operations
│   └── utils
│       └── errorHandler.js     # Standardized error handling
├── package.json                # Configuration file for npm
└── README.md                   # Documentation for the project
```

## Installation

1. Clone the repository:
   ```
   git clone <repository-url>
   ```

2. Navigate to the project directory:
   ```
   cd employee-leave-chatbot
   ```

3. Install the dependencies:
   ```
   npm install
   ```

## Usage

1. Start the application:
   ```
   npm start
   ```

2. Access the chatbot through the designated API endpoints defined in `src/routes/chatbotRoutes.js`.

## Contributing

Contributions are welcome! Please feel free to submit a pull request or open an issue for any enhancements or bug fixes.

## License

This project is licensed under the MIT License. See the LICENSE file for more details.