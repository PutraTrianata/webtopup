<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NotFaceN Store - PUBG Mobile</title>
  <link rel="stylesheet" href="css/pubg.css">
</head>
<body>

    <header>
        <a href="/" class="logo">NotFaceN STORE</a>
        <nav>
          <ul>
            <li><a href="/">TopUp</a></li>
            <li><a href="#">Cek Transaksi</a></li>
            <li><a href="#">Berita</a></li>
          </ul>
        </nav>
        <div class="header-icons">
          <a href="#" class="icon-search"></a>
          <a href="#" class="icon-user"></a>
          <a href="#" class="icon-cart"></a>
        </div>
      </header>
      
      <div class="game-banner">
        <div class="game-banner-bg"></div>
        <div class="game-logo-large">
            <img src="img/imagePUBG.png" alt="PUBG Mobile">
          <div class="game-info">
            <p>Proses Cepat</p>
            <p>Pembayaran Aman</p>
            <p>Layanan 24 Jam</p>
          </div>
        </div>
        <h1>PUBG Mobile</h1>
      </div>
      
      <form id="account-form">
        <div class="account-form">
          <div class="form-header">
            Masukkan Data Akun
          </div>
          <div class="form-content">
            <div class="input-group" style="margin-right: 20px;">
              <div class="input-label">ID</div>
              <input type="text" name="user_id" id="user_id" class="input-field" placeholder="Masukkan ID" required>
            </div>
            <!-- <div class="input-group">
              <div class="input-label">SERVER</div>
              <input type="text" name="server" id="server" class="input-field" placeholder="Masukkan Server" required>
            </div> -->
          </div>
        </div>
      
        <div class="products-grid">
          <!-- UC Package 1 -->
          <div class="product-card">
            <div class="product-header">UC Package 1</div>
            <div class="product-content">
              <div class="package-details">
                <p>86 UC</p>
                <p>Rp 19.500</p>
              </div>
              <!-- Button untuk UC Package 1 -->
              <button type="button" onclick="submitForm('UC Package 1')" class="buy-button">BELI</button>
            </div>
          </div>
      
          <!-- UC Package 2 -->
          <div class="product-card">
            <div class="product-header">UC Package 2</div>
            <div class="product-content">
              <div class="package-details">
                <p>172 UC</p>
                <p>Rp 38.000</p>
              </div>
              <!-- Button untuk UC Package 2 -->
              <button type="button" onclick="submitForm('UC Package 2')" class="buy-button">BELI</button>
            </div>
          </div>
      
          <!-- UC Package 3 -->
          <div class="product-card">
            <div class="product-header">UC Package 3</div>
            <div class="product-content">
              <div class="package-details">
                <p>257 UC</p>
                <p>Rp 57.000</p>
              </div>
              <!-- Button untuk UC Package 3 -->
              <button type="button" onclick="submitForm('UC Package 3')" class="buy-button">BELI</button>
            </div>
          </div>
      
          <!-- UC Package 4 -->
          <div class="product-card">
            <div class="product-header">UC Package 4</div>
            <div class="product-content">
              <div class="package-details">
                <p>344 UC</p>
                <p>Rp 76.000</p>
              </div>
              <!-- Button untuk UC Package 4 -->
              <button type="button" onclick="submitForm('UC Package 4')" class="buy-button">BELI</button>
            </div>
          </div>
      
          <!-- UC Package 5 -->
          <div class="product-card">
            <div class="product-header">UC Package 5</div>
            <div class="product-content">
              <div class="package-details">
                <p>429 UC</p>
                <p>Rp 95.000</p>
              </div>
              <!-- Button untuk UC Package 5 -->
              <button type="button" onclick="submitForm('UC Package 5')" class="buy-button">BELI</button>
            </div>
          </div>
      
          <!-- UC Package 6 -->
          <div class="product-card">
            <div class="product-header">UC Package 6</div>
            <div class="product-content">
              <div class="package-details">
                <p>514 UC</p>
                <p>Rp 115.000</p>
              </div>
              <!-- Button untuk UC Package 6 -->
              <button type="button" onclick="submitForm('UC Package 6')" class="buy-button">BELI</button>
            </div>
          </div>
        </div>
      </form>
      
      <footer>
        <div class="divider"></div>
        <p>© 2025 NotFaceN Store. All Rights Reserved.</p>
      </footer>
      
      <script>
        // Function to validate form and redirect to confirmation page
        function submitForm(packageName) {
          // Get form values
          const userId = document.getElementById('user_id').value;
        //   const server = document.getElementById('server').value;
          
          // Validate the form
          if (!userId ) {
            alert('Silakan masukkan ID terlebih dahulu!');
            return;
          }
          
          // Redirect to confirmation page with parameters
          window.location.href = `konfirmasiPUBG.html?user_id=${encodeURIComponent(userId)}&package=${encodeURIComponent(packageName)}`;
        }
      </script>
      
      </body>
      </html>