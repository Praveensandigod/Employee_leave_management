const intents = {
    LOGIN: {
        trigger: /login/i,
        handler: (userInput) => {
            // Logic to handle user login
            return "Please provide your username and password to log in.";
        }
    },
    REGISTER: {
        trigger: /register/i,
        handler: (userInput) => {
            // Logic to handle user registration
            return "To register, please provide your details such as name, email, and password.";
        }
    },
    CHECK_LEAVE_BALANCE: {
        trigger: /check leave balance/i,
        handler: (userInput) => {
            // Logic to check leave balance
            return "You can check your leave balance by logging into your account.";
        }
    },
    APPLY_FOR_LEAVE: {
        trigger: /apply for leave/i,
        handler: (userInput) => {
            // Logic to apply for leave
            return "To apply for leave, please provide the leave type and duration.";
        }
    },
    VIEW_LEAVE_STATUS: {
        trigger: /view leave status/i,
        handler: (userInput) => {
            // Logic to view leave status
            return "You can view your leave status by checking your account dashboard.";
        }
    },
    UNDERSTAND_LEAVE_POLICIES: {
        trigger: /leave policies/i,
        handler: (userInput) => {
            // Logic to explain leave policies
            return "Our leave policies include annual leave, sick leave, and parental leave. Would you like more details on any specific type?";
        }
    },
    DEFAULT: {
        handler: () => {
            return "I'm sorry, I didn't understand that. Can you please rephrase your question?";
        }
    }
};

export default intents;