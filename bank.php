<?php
include 'classes/account.php';
include 'classes/customer.php';
include 'includes/header.php';

$accounts = [
    new Account("Checking", "001-123456", -2500),
    new Account("Savings", "002-654321", 5000000),
    new Account("Emergency Fund", "003-987654", 100000),
    new Account("Investment", "004-456789", 15000)
];


$customer = new Customer("Krizie Mae", "Lagman", "kplagman@student.hau.edu.ph", $accounts);
?>

<h2>NAME:  <?= strtoupper($customer->getFullName()); ?></h2>
<table>
    <tr>
        <th>Account Number</th>
        <th>Account Type</th>
        <th>Balance</th>
    </tr>
    <?php foreach ($customer->accounts as $account): ?>
    <tr>
        <td><?= $account->number; ?></td>
        <td><?=$account->type; ?></td>
        <td class="<?= $account->balance >= 0 ? 'credit' : 'overdrawn'; ?>">
            <?= $account->balance >= 0 
                    ? "₱" . number_format($account->balance, 2) 
                    : "-₱" . number_format(abs($account->balance), 2); 
            ?>
        </td>
    </tr>
<?php endforeach; ?>
</table>

<?php include 'includes/footer.php'; ?>
