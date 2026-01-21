<?php
include('../inc/topbar.php');
if(empty($_SESSION['admin-username']))
{
    header("Location: login.php");
}

// Approve leave
if(isset($_GET['id']))
{
    $id = intval($_GET['id']);

    // Fetch leave and employee details before updating
    $sql_fetch = "SELECT tblleave.*, tblemployee.email, tblemployee.fullname 
                  FROM tblleave 
                  JOIN tblemployee ON tblleave.email = tblemployee.email 
                  WHERE tblleave.leaveID = ?";
    $stmt_fetch = $dbh->prepare($sql_fetch);
    $stmt_fetch->execute([$id]);
    $leave = $stmt_fetch->fetch(PDO::FETCH_ASSOC);

    if ($leave) {
        // Update the leave status
        $sql = "UPDATE tblleave SET status=? WHERE leaveID=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute(["Approved", $id]);

        // Send email notification
        require_once '../send_email.php';
        sendLeaveApprovalEmail(
            $leave['email'],
            $leave['fullname'],
            $leave['leaveID'],
            $leave['start_date'],
            $leave['end_date'],
            $leave['reason']
        );

        header("location: leave_record.php");
    } else {
        header("location: leave_record.php?error=leave_not_found");
    }
}

// Decline leave
if(isset($_GET['did']))
{
    $did = intval($_GET['did']);

    $sql = "UPDATE tblleave SET status=? WHERE leaveID=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(["Declined", $did]);
    header("location: leave_record.php");
}

?>