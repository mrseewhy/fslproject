import './bootstrap';

// Attach the counter function to the window object to make it globally accessible
window.counter = function (start, end, duration) {
    return {
      current: start,
      start,
      end,
      duration,
      interval: null,
      init() {
        const stepTime = this.duration / (this.end - this.start);
        this.interval = setInterval(() => {
          if (this.current < this.end) {
            this.current++;
          } else {
            clearInterval(this.interval);
          }
        }, stepTime);
      },
    };
  };

 
 