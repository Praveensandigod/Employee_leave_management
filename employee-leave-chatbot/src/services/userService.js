class UserService {
    constructor() {
        this.users = []; // This will hold user data for demonstration purposes
    }

    registerUser(username, password) {
        const existingUser = this.users.find(user => user.username === username);
        if (existingUser) {
            throw new Error('User already exists. Please choose a different username.');
        }
        const newUser = { username, password, leaveBalance: 20 }; // Default leave balance
        this.users.push(newUser);
        return 'Registration successful! You can now log in.';
    }

    loginUser(username, password) {
        const user = this.users.find(user => user.username === username);
        if (!user) {
            throw new Error('User not found. Please register first.');
        }
        if (user.password !== password) {
            throw new Error('Incorrect password. Please try again.');
        }
        return 'Login successful! Welcome back, ' + username + '.';
    }

    getUserInfo(username) {
        const user = this.users.find(user => user.username === username);
        if (!user) {
            throw new Error('User not found.');
        }
        return {
            username: user.username,
            leaveBalance: user.leaveBalance
        };
    }
}

export default UserService;