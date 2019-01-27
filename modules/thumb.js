export default function thumb(url, size = 100) {
  return url + '?imageView2/2/w/' + size + '/h/' + size + '/q/75';
}
