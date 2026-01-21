class LeaveService {
    constructor() {
        this.leaveBalances = {}; // Store leave balances for users
        this.leaveApplications = {}; // Store leave applications
        this.leavePolicies = "Employees are entitled to 20 days of leave per year."; // Example leave policy
    }

    // Method to check leave balance for a user
    checkLeaveBalance(userId) {
        return this.leaveBalances[userId] || "Leave balance not found.";
    }

    // Method to apply for leave
    applyForLeave(userId, leaveDetails) {
        if (!this.leaveApplications[userId]) {
            this.leaveApplications[userId] = [];
        }
        this.leaveApplications[userId].push(leaveDetails);
        return "Leave application submitted successfully.";
    }

    // Method to view leave status
    viewLeaveStatus(userId) {
        return this.leaveApplications[userId] || "No leave applications found.";
    }

    // Method to get company leave policies
    getLeavePolicies() {
        return this.leavePolicies;
    }

    // Method to set leave balance for a user (for initialization or updates)
    setLeaveBalance(userId, balance) {
        this.leaveBalances[userId] = balance;
    }
}

export default LeaveService;