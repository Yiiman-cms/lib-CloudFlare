<?php
	/**
	 * Created by tokapps TM.
	 * Programmer: gholamreza beheshtian
	 * Mobile:09353466620
	 * Company Phone:05138846411
	 * Site:http://tokapps.ir
	 * Date: ۰۱/۲۲/۲۰۲۰
	 * Time: ۱۶:۴۱ بعدازظهر
	 */
	
	namespace system\lib;
	
	
	use system\lib\cloudflare\Adapter\Guzzle;
	use system\lib\cloudflare\Auth\APIKey;
	use system\lib\cloudflare\Endpoints\Crypto;
	use system\lib\cloudflare\Endpoints\CustomHostnames;
	use system\lib\cloudflare\Endpoints\DNS;
	use system\lib\cloudflare\Endpoints\FirewallSettings;
	use system\lib\cloudflare\Endpoints\IPs;
	use system\lib\cloudflare\Endpoints\LoadBalancers;
	use system\lib\cloudflare\Endpoints\Membership;
	use system\lib\cloudflare\Endpoints\PageRules;
	use system\lib\cloudflare\Endpoints\Pools;
	use system\lib\cloudflare\Endpoints\Railgun;
	use system\lib\cloudflare\Endpoints\SSL;
	use system\lib\cloudflare\Endpoints\TLS;
	use system\lib\cloudflare\Endpoints\UARules;
	use system\lib\cloudflare\Endpoints\User;
	use system\lib\cloudflare\Endpoints\WAF;
	use system\lib\cloudflare\Endpoints\ZoneLockdown;
	use system\lib\cloudflare\Endpoints\Zones;
	use system\lib\cloudflare\Endpoints\ZoneSettings;
	use yii\base\Component;
	
	/**
	 * Class CloudFlare
	 * @package system\lib
	 * @property Guzzle $adapter
	 */
	class CloudFlare  {
		private $adapter;
		public $apiKey;
		public $email;
		
		public function init(){
			$key     = new APIKey( $this->email , $this->apiKey );
			$this->adapter = new Guzzle( $key );
		}
		/**
		 * @return \system\lib\cloudflare\Endpoints\DNS
		 */
		public function DNS() {
			return new DNS( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\Crypto
		 */
		public function Crypto(){
			return new Crypto( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\CustomHostnames
		 */
		public function CustomHostnames(){
			return new CustomHostnames( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\FirewallSettings
		 */
		public function FirewallSettings(){
			return new FirewallSettings( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\IPs
		 */
		public function Ips(){
			return new IPs( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\LoadBalancers
		 */
		public function LoadBalance(){
			return new LoadBalancers( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\Membership
		 */
		public function Membership(){
			return new Membership( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\PageRules
		 */
		public function PageRules(){
			return new PageRules( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\Pools
		 */
		public function Pools(){
			return new Pools( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\Railgun
		 */
		public function Railgun(){
			return new Railgun( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\SSL
		 */
		public function SSL(){
			return new SSL( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\TLS
		 */
		public function TLS(){
			return new TLS( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\UARules
		 */
		public function UARules(){
			return new UARules( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\User
		 */
		public function User(){
			return new User( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\WAF
		 */
		public function WAF(){
			return new WAF( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\ZoneLockdown
		 */
		public function ZoneLockDown(){
			return new ZoneLockdown( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\Zones
		 */
		public function Zones(){
			return new Zones( $this->adapter );
		}
		
		/**
		 * @return \system\lib\cloudflare\Endpoints\ZoneSettings
		 */
		public function ZoneSettings(){
			return new ZoneSettings( $this->adapter );
		}
		
	}
