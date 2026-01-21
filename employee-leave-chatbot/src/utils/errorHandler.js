module.exports = (err, req, res, next) => {
    console.error(err.stack);

    const statusCode = err.statusCode || 500;
    const message = err.message || 'Something went wrong. Please try again later.';

    res.status(statusCode).json({
        success: false,
        message: message,
    });
};