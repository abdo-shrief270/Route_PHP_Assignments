<form method="post" action="logic/logic.php">
    <input required type="number" name="numOfHours" placeholder="Number of Hours">
    <select required name="department">
        <option value="">--- Choose a department ---</option>
        <option value="internet technology">Internet Technology</option>
        <option value="customer service">Customer Service</option>
        <option value="accountant">Accountant</option>
    </select>

    <input required type="number" name="discount" placeholder="Discount">
    <button name="submit">Calc</button>
</form>
