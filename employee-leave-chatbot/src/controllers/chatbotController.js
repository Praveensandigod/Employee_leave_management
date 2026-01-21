class ChatbotController {
    constructor(leaveService, userService) {
        this.leaveService = leaveService;
        this.userService = userService;
    }

    async handleLogin(req, res) {
        const { username, password } = req.body;
        try {
            const user = await this.userService.login(username, password);
            res.json({ message: "Login successful", user });
        } catch (error) {
            res.status(400).json({ error: error.message });
        }
    }

    async handleRegistration(req, res) {
        const { username, password, email } = req.body;
        try {
            const newUser = await this.userService.register(username, password, email);
            res.json({ message: "Registration successful", user: newUser });
        } catch (error) {
            res.status(400).json({ error: error.message });
        }
    }

    async checkLeaveBalance(req, res) {
        const { userId } = req.params;
        try {
            const balance = await this.leaveService.getLeaveBalance(userId);
            res.json({ balance });
        } catch (error) {
            res.status(400).json({ error: error.message });
        }
    }

    async applyForLeave(req, res) {
        const { userId, leaveType, startDate, endDate } = req.body;
        try {
            const application = await this.leaveService.applyLeave(userId, leaveType, startDate, endDate);
            res.json({ message: "Leave application submitted", application });
        } catch (error) {
            res.status(400).json({ error: error.message });
        }
    }

    async viewLeaveStatus(req, res) {
        const { applicationId } = req.params;
        try {
            const status = await this.leaveService.getLeaveStatus(applicationId);
            res.json({ status });
        } catch (error) {
            res.status(400).json({ error: error.message });
        }
    }

    async getLeavePolicies(req, res) {
        try {
            const policies = await this.leaveService.getLeavePolicies();
            res.json({ policies });
        } catch (error) {
            res.status(400).json({ error: error.message });
        }
    }
}

export default ChatbotController;