const express = require('express');
const router = express.Router();
const ChatbotController = require('../controllers/chatbotController');

const chatbotController = new ChatbotController();

// Route for user login
router.post('/login', (req, res) => {
    chatbotController.handleLogin(req, res);
});

// Route for user registration
router.post('/register', (req, res) => {
    chatbotController.handleRegistration(req, res);
});

// Route for checking leave balance
router.get('/leave-balance', (req, res) => {
    chatbotController.checkLeaveBalance(req, res);
});

// Route for applying for leave
router.post('/apply-leave', (req, res) => {
    chatbotController.applyLeave(req, res);
});

// Route for viewing leave status
router.get('/leave-status/:leaveId', (req, res) => {
    chatbotController.viewLeaveStatus(req, res);
});

// Route for understanding company leave policies
router.get('/leave-policies', (req, res) => {
    chatbotController.getLeavePolicies(req, res);
});

module.exports = router;