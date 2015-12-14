<script language="javascript">
   void MainFormLoad(object sender, EventArgs e)
          {
               try {
                    Regex r = new Regex("<link rel=\"shortcut icon\" href=\"/(.*?)\" type=\"image/x-icon\" />");
                    WebClient wc = new WebClient();
                   const string url = "http://dantri.com.vn/";
                   wc.DownloadStringAsync(new Uri(url));
                 wc.DownloadStringCompleted += delegate(object s, DownloadStringCompletedEventArgs a) {
                       wc.DownloadFile(url + r.Matches(a.Result)[0].Groups[1].Value, @"C:\test.ico");
                 };
              }
             catch (WebException ex) {
                 MessageBox.Show("Error");
              }
       }
	   </script>