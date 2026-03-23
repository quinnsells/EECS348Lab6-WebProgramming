function checkPasswords() {
  
  // Password Input
  const pw1 = document.getElementById('pw1').value;
  const pw2 = document.getElementById('pw2').value;
  const rslt = document.getElementById('rslt');
  
  // Character Length Check
  if (pw1.length < 8) {
    alert('Password must be at least 8 characters.');
    rslt.className = 'error';
    return; 
  }

  // Match Check
  if (pw1 !== pw2) {
    alert("Passwords don't match");
    rslt.className = 'error';
    return;
  }

  // If Both Checks Passed
  const result = document.getElementById('result');
  rslt.textContent = 'Passwords match';
  rslt.className = 'success';
}