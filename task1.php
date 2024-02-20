<head>

    <title>Employee Information Form</title>
</head>

<body>

    <table align="left">
        <tr>
            <td colspan="2" align="center">
                <h2>Employee Information Form</h2>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="employeeName">Employee Name:</label>
            </td>
            <td>
                <input type="text" id="employeeName" name="employeeName" required>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="employeeID">Employee ID:</label>
            </td>
            <td>
                <input type="text" id="employeeID" name="employeeID" required>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="employeeDOB">Date of Birth:</label>
            </td>
            <td>
                <input type="date" id="employeeDOB" name="employeeDOB" required>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="employeeAddress">Address:</label>
            </td>
            <td>
                <textarea id="employeeAddress" name="employeeAddress" rows="4" required></textarea>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="employeePhone">Phone Number:</label>
            </td>
            <td>
                <input type="tel" id="employeePhone" name="employeePhone" required>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="employeeEmail">Email:</label>
            </td>
            <td>
                <input type="email" id="employeeEmail" name="employeeEmail" required>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="employeePassword">Password:</label>
            </td>
            <td>
                <input type="password" id="employeePassword" name="employeePassword" required>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="retypePassword">Retype Password:</label>
            </td>
            <td>
                <input type="password" id="retypePassword" name="retypePassword" required>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label>Gender:</label>
            </td>
            <td>
                <label><input type="radio" name="gender" value="male"> Male</label>
                <label><input type="radio" name="gender" value="female"> Female</label>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="emergencyContact">Emergency Contact:</label>
            </td>
            <td>
                <input type="tel" id="emergencyContact" name="emergencyContact" required>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="bloodGroup">Blood Group:</label>
            </td>
            <td>
                <input type="text" id="bloodGroup" name="bloodGroup" required>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="bankAccountNo">Bank Account Number:</label>
            </td>
            <td>
                <input type="text" id="bankAccountNo" name="bankAccountNo" required>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label>Position:</label>
            </td>
            <td>
                <label><input type="radio" name="position" value="senior"> Senior</label>
                <label><input type="radio" name="position" value="junior"> Junior</label>
                <label><input type="radio" name="position" value="intern"> Intern</label>
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="department">Department:</label>
            </td>
            <td>
                <select id="department" name="department">
                    <option value="hr">Human Resources</option>
                    <option value="it">Information Technology</option>
                    <option value="finance">Finance</option>
                    <option value="marketing">Marketing</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button type="submit">Submit</button>
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>

</body>

</html>