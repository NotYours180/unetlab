<?php
# vim: syntax=php tabstop=4 softtabstop=0 noexpandtab laststatus=1 ruler

/**
 * html/templates/ostinato.php
 *
 *Ostinato template for UNetLab.
 * You should have received a copy of the GNU General Public License
 * along with UNetLab.If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Andrea Dainese <andrea.dainese@gmail.com>
 * @copyright 2014-2016 Andrea Dainese
 * @license BSD-3-Clause https://github.com/dainok/unetlab/blob/master/LICENSE
 * @link http://www.unetlab.com/
 * @version 20160719
 */

$p['type'] = 'qemu';
$p['name'] = 'Ostinato';
$p['icon'] = 'Network Analyzer.png';
$p['cpu'] = 1;
$p['ram'] = 512; 
$p['ethernet'] = 2; 
$p['console'] = 'telnet'; 
$p['qemu_arch'] = 'x86_64';
$p['qemu_options'] = '-machine type=pc-1.0,accel=kvm -serial mon:stdio -nographic -nodefconfig -nodefaults -display none -vga std -rtc base=utc';
?>
