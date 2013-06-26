<?php
class UserIdentity extends CUserIdentity {
	public function authenticate() {
		$u1 = Usr::model ()->findByAttributes ( array (
				'username' => $this->username 
		) );
		if ($u1 == null) {
			$u1 = Usr::model ()->findByAttributes ( array (
					'email' => $this->username 
			) );
		}
		
		if ($u1 == null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		else if ($u1->password !== md5 ( $this->password ))
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		else {
			$this->errorCode = self::ERROR_NONE;
			// $this->_id=$u1->ID;
			$this->setState ( 'id', $u1->id );
			$this->setState ( 'status', $u1->status );
			$this->setState ( 'username', $u1->username );
			$this->setState ( 'privilege', $u1->privilege );
			
			$this->setState ( 'devisiid', '-' );
			$this->setState ( 'departemenid', '-' );
			$this->setState ( 'nama', '-' );
			$this->setState ( 'userid', '-' );
			
			if ($u1->userid!=null) {
				$karyawan=Karyawan::model()->findByPk($u1->userid);
				if ($karyawan!=null) {
					$this->setState ( 'devisiid', $karyawan->devisiid );
					$this->setState ( 'departemenid', $karyawan->departemenid );
					$this->setState ( 'nama', $karyawan->nama );
					$this->setState ( 'userid', $karyawan->id );
				}
			}
			
			
		}
		return ! $this->errorCode;
	}
	

}