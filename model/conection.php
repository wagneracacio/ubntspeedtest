<?php

class conection
{
	private $server, $username, $password, $ap_ip, $duration;
	
	public function __construct($username, $password, $ap_ip, $server, $duration)
    {
        $this->username = $username;
        $this->password = $password;
        $this->ap_ip = $ap_ip;
        $this->server = $server;
		$this->duration = $duration;

    }
	public function execute()
	{
		include('Net/SSH2.php');

                $ssh = new Net_SSH2($this->ap_ip);
                if (!$ssh->login($this->username, $this->password)) {
                        exit('Login Failed');
                }
		$ssh->read("{$this->username}@{$this->username}:~$");
		$ssh->write("iperf -c {$this->server} -i 1 -t {$this->duration}\n");
		$result = $ssh->read("{$this->username}@{$this->username}:~$");
		preg_match_all ("/KBytes(.*)bits/U", $result, $pat_array);
		for($i = 0; $i < $this->duration; ++$i) 
		{
			$pat_array[0][$i] = str_replace(" ", "", $pat_array[0][$i]);
			$download[$i] = str_replace("KBytes", "", $pat_array[0][$i]);
		}
		for($i = 0; $i < $this->duration; ++$i) 
		{
			$termo = 'Kbits';
			$pattern = '/' . $termo . '/';
			if (preg_match($pattern, $download[$i])) {
				$download[$i] = str_replace("Kbits", "", $download[$i]);
				$download[$i] = "0.{$download[$i]}";
			} else {
				$download[$i] = str_replace("Mbits", "", $download[$i]);
			}
			echo "speedChart.data.labels.push(\"\");";
			echo "speedChart.data.datasets[0].data.push(".$download[$i].");";
			echo "speedChart.data.datasets[1].data.push(".$download[$i].");";
		}
	}
}
?>




