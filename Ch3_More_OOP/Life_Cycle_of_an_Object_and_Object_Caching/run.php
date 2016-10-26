<?php 
	/**
	 * Object is live until the script ends. 
	 *  - Unlike web tier in Java, there is no global or application-level
	 scop in PHP. So you cannot persist the object normally.
	 *  - If u wnat to persist an object, you can serialize it and later unserialize it when necessary. Manually
	 *  handling this serialization and unserialization process may seem boring sometimes. It would really be nice
	 if you can store the object somewhere, and then store it later. 
	 */

	/**
	 * Have a look at "memcached API". It runs as a standalone server and caches objects directly into memory.
	 Memcached server listens in a port.
	 http://jehiah.cz/projects/memcahced-win32
	 */
 ?>