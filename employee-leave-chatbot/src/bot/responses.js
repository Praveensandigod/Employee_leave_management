const responses = {
    welcome: () => {
        return "Welcome to the Employee Leave Management System! How can I assist you today?";
    },
    loginSuccess: (username) => {
        return `Hello ${username}, you have successfully logged in. What would you like to do next?`;
    },
    loginFailure: () => {
        return "Login failed. Please check your credentials and try again.";
    },
    registrationSuccess: () => {
        return "Registration successful! You can now log in to your account.";
    },
    registrationFailure: () => {
        return "Registration failed. Please try again or contact support.";
    },
    leaveBalance: (balance) => {
        return `You have ${balance} days of leave remaining.`;
    },
    applyLeaveSuccess: () => {
        return "Your leave application has been submitted successfully.";
    },
    applyLeaveFailure: () => {
        return "There was an error submitting your leave application. Please try again.";
    },
    leaveStatus: (status) => {
        return `Your leave application status is: ${status}.`;
    },
    leavePolicy: () => {
        return "Our leave policy allows for a maximum of 20 days of leave per year. Please refer to the company handbook for more details.";
    },
    unknownIntent: () => {
        return "I'm sorry, I didn't understand that. Can you please rephrase your question?";
    },
    error: () => {
        return "An error occurred while processing your request. Please try again later.";
    }
};

module.exports = responses;